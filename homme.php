<?php
// Define constants
define('FIREBASE_CONFIG_PATH', __DIR__ . '/serviceAccountKey.json');
define('DATABASE_URI', 'https://housemusickitchen-b3f91-default-rtdb.firebaseio.com/');

require 'vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Exception\AuthException;
use Kreait\Firebase\Exception\DatabaseException;

$tracks = []; // Initialize the array to store tracks
$error_message = '';

// 1. Retrieve data from Firebase
try {
    // Check if the Firebase credentials file exists.
    if (!file_exists(FIREBASE_CONFIG_PATH)) {
        throw new Exception("Firebase credentials file missing at: " . FIREBASE_CONFIG_PATH);
    }

    // For debugging:  Print contents of credentials file
    // var_dump(file_get_contents(FIREBASE_CONFIG_PATH)); // REMOVE FROM PRODUCTION

    // Initialize Firebase factory with service account and database URI
    $factory = (new Factory)
        ->withServiceAccount(FIREBASE_CONFIG_PATH)
        ->withDatabaseUri(DATABASE_URI);

    // Create a Firebase database instance.
    $database = $factory->createDatabase();

    // Get the reference to the 'tracks' node in the database and retrieve the data.
    $tracksSnapshot = $database->getReference('tracks')->getValue();

    // Check if data was successfully retrieved and if it's an array.
    if (!empty($tracksSnapshot) && is_array($tracksSnapshot)) {
        // If the data is valid assign the values to the tracks array.
        $tracks = array_values($tracksSnapshot);
    } else {
        $error_message = "No tracks found or invalid data structure.  Check your Firebase 'tracks' node.";
    }

} catch (AuthException $e) {
    $error_message = "Authentication Error: " . $e->getMessage();
    error_log("Firebase Authentication Error: " . $e->getMessage());
} catch (DatabaseException $e) {
    $error_message = "Database Error: " . $e->getMessage();
    error_log("Firebase Database Error: " . $e->getMessage());
} catch (Exception $e) {
    $error_message = "General Error: " . $e->getMessage();
    error_log("General Firebase Error: " . $e->getMessage());
}

// 2. Data Processing and Organization (only if no error)
if (empty($error_message)) { // Only proceed if there's no error
    // Ensure $tracks is an array before sorting
    if (!is_array($tracks)) {
        $error_message = "Error: Tracks data is not an array.";
    } else {

        // Sort tracks by artist name, case-insensitively.
        usort($tracks, function ($a, $b) {
            return strcasecmp($a['artist'], $b['artist']);
        });

        // Group tracks by artist to build the menu structure
        $tracksByArtist = []; // Initialize array to store tracks grouped by artists.
        foreach ($tracks as $track) {
            // Use null coalescing operator to provide a default value
            $artist = $track['artist'] ?? 'Unknown Artist';
            // Check if the artist already exists as a key and initialize if not.
            if (!isset($tracksByArtist[$artist])) {
                $tracksByArtist[$artist] = []; // Initialize the track's array
            }
            // Add the track to the artist's array.
            $tracksByArtist[$artist][] = $track;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Menu</title>
    <style>
        /* Basic Styling - Replace with your own CSS file or styling */
        body { font-family: sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .menu { width: 100%; overflow-x: hidden;  } /* Allow horizontal scrolling */
        .menu__item { margin-bottom: 10px; background-color: #fff; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); padding: 15px; }
        .menu__item-link { display: block; font-weight: bold; color: #333; text-decoration: none; padding: 10px 0; }
        .menu__item-link:hover { color: #007bff; }
        .menu__item-img { max-width: 50px; border-radius: 5px; vertical-align: middle; margin-left: 10px; }
        .category { display: none; margin-top: 10px; padding: 10px; background-color: #eee; border-radius: 5px; }
        .product { margin-bottom: 10px; padding: 10px; background-color: #fff; border-radius: 5px; border: 1px solid #ddd;}
        .trk-row { display: flex; align-items: center; padding: 5px 0; border-bottom: 1px solid #eee; }
        .trk-cell { flex: 1; padding: 0 5px; }
        .trk-cell img { max-width: 30px; max-height: 30px; }
        .play-fly { display: inline-block; } /* Added for visibility */
        .play-fly a { display: inline-block; padding: 5px 10px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px; }
        .play-fly a:hover { background-color: #3e8e41; }
        .marquee {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
            background-color: #ddd; /* Background for visual clarity */
            padding: 5px 0; /* Reduced padding */
            border-radius: 5px;
        }

        .marquee__inner {
            display: inline-block;
            animation: marquee 15s linear infinite;
            padding: 0 20px; /* Adjust padding as needed */
            white-space: nowrap; /* Prevent text from wrapping */
        }

        .marquee__inner span {
            display: inline-block; /* Ensures correct spacing */
            font-size: 14px; /* Adjust font size as needed */
            color: #555; /* Text color */
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }


    </style>
</head>
<body>
<!-- Da Capo Logo Here (Example) -->
<h1>Da Capo</h1>

<?php if (!empty($error_message)): ?>
    <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
<?php else: ?>

<nav class="menu">
    <?php foreach ($tracksByArtist as $artist => $artistTracks): ?>
        <?php
        $artist_safe = str_replace(' ', '', $artist);
        $firstTrack = $artistTracks[0] ?? []; // Use null coalescing operator and check for empty array
        $firstTrackImage = $firstTrack['image'] ?? ''; //Use null coalescing operator to handle null image
        ?>

        <div class="menu__item" id="product-list-<?php echo htmlspecialchars($artist_safe); ?>" style="padding-top: 20px; padding-bottom: 20px;">
            <a class="menu__item-link" data-category="<?php echo htmlspecialchars($artist_safe); ?>"
               onclick="toggleCategory('<?php echo htmlspecialchars($artist_safe); ?>')">
                <?php echo htmlspecialchars($artist); ?>
            </a>
            <?php if ($firstTrackImage): ?>
            <img style="margin-left: 30%" class="menu__item-img" src="<?php echo htmlspecialchars($firstTrackImage); ?>" alt="<?php echo htmlspecialchars($artist); ?>"/>
            <?php endif; ?>
            <div class="category" id="<?php echo htmlspecialchars($artist_safe); ?>" style="display: none;">
                <div class="trklist v- full init-invis">
                    <div class="trk-row hdr">
                        <div class="trk-cell tnum-pos"></div>
                        <div class="trk-cell thumb"></div>
                        <div class="trk-cell title sort">TRACK</div>
                        <div class="trk-cell artists sort">ARTISTS</div>
                        <div class="trk-cell genre sort">GENRE</div>
                        <div class="trk-cell label sort">LABEL</div>
                        <div class="trk-cell r-date sort" style="width: 80px;">RELEASED</div>
                        <div class="trk-cell btncell" style="width: 120px;"></div>
                        <div class="sort-sel"><b>Sort</b> </div>
                    </div>

                    <?php foreach ($artistTracks as $track): ?>
                        <?php
                        $ft_artist_safe = str_replace(' ', '', $track['ft_artist'] ?? '');
                        $title_safe = str_replace(' ', '', $track['title'] ?? '');
                        $track_data_json = htmlspecialchars(json_encode($track), ENT_QUOTES, 'UTF-8');
                        $trackImage = $track['image'] ?? ''; // Handle potential missing image
                        ?>
                        <div class="product" data-id="<?php echo htmlspecialchars($track['id'] ?? ''); ?>" data-price="<?php echo htmlspecialchars($track['price'] ?? ''); ?>">
                            <h3>
                                <div data-trid="<?php echo htmlspecialchars($track['id'] ?? ''); ?>" class="trk-row play-trk ptk-<?php echo htmlspecialchars($track['id'] ?? ''); ?> ptk-ref-<?php echo htmlspecialchars($track['id'] ?? ''); ?>">
                                    <div class="trk-cell tnum-pos"></div>
                                    <div class="trk-cell thumb">
                                        <?php if ($trackImage): ?>
                                            <img src="<?php echo htmlspecialchars($trackImage); ?>" width="50" height="50"/>
                                        <?php endif; ?>
                                        <div class="play-fly">
                                            <a href="javascript:void(0)" class="com-play played" title="Play Track"
                                               onclick="toggleAudio('<?php echo htmlspecialchars($track['audio'] ?? ''); ?>', '<?php echo htmlspecialchars($track['title'] ?? ''); ?>', '<?php echo htmlspecialchars($track['artist'] ?? ''); ?> ft. <?php echo htmlspecialchars($track['ft_artist'] ?? ''); ?>')">
                                                Play
                                            </a>
                                        </div>
                                    </div>
                                    <div class="trk-cell title">
                                        <a href="/track/<?php echo htmlspecialchars($title_safe); ?>/hit-it-up-vocal-mix">
                                            <?php echo htmlspecialchars($track['artist'] ?? ''); ?> ft. <?php echo htmlspecialchars($track['ft_artist'] ?? ''); ?> - <?php echo htmlspecialchars($track['title'] ?? ''); ?>
                                        </a>
                                        <span class="adap-br"><br /></span>
                                        <span class="duration">(<?php echo htmlspecialchars($track['duration'] ?? ''); ?>)</span>
                                    </div>
                                    <div class="trk-cell artists">
                                        <a href="/artist/561171/<?php echo htmlspecialchars($artist_safe); ?>" class="com-artists" data-aid="561171"><?php echo htmlspecialchars($track['artist'] ?? ''); ?> ft. <?php echo htmlspecialchars($track['ft_artist'] ?? ''); ?></a>
                                        <span class="adap-br"><br /></span>
                                    </div>
                                    <div class="trk-cell genre">
                                        <a href="/genre/13/deep-house"><?php echo htmlspecialchars($track['genre'] ?? ''); ?></a>
                                    </div>
                                    <div class="trk-cell label">
                                        <span><?php echo htmlspecialchars($track['label'] ?? ''); ?></span>
                                    </div>
                                    <div class="trk-cell r-date" style="width: 80px;"><?php echo htmlspecialchars($track['release_date'] ?? ''); ?></div>
                                    <div class="trk-cell btncell" style="width: 120px;">
                                        <div style="background-color:transparent" class="buy-cont">
                                            <a href="javascript:void(0);" class="com-buy" data-cart="{title_id: 52170145, track_id: 11834552}" title="Add to Cart">
                                                <span class="price">
                                                    <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent; padding: 5px 10px;" class="product" onclick="addToCart(<?php echo htmlspecialchars($track['id'] ?? ''); ?>)" data-price="<?php echo htmlspecialchars($track['price'] ?? ''); ?>">
                                                        $<?php echo htmlspecialchars($track['price'] ?? ''); ?>
                                                    </button>

                                                </span>
                                            </a>
                                            <a href="javascript:void(0)" class="cart-alt"></a>
                                        </div>
                                    </div>
                                    <div class="trk-cell fly-btn">
                                        <svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg>
                                    </div>
                                </div>
                            </h3>
                        </div>
                    <?php endforeach; ?>

                    <div id="bodyBay" data-init_cpo="">
                        <script type="text/javascript">
                            $(function() {
                                // enablePageListPage(); // Assuming this function exists
                            });
                        </script>
                    </div>
                </div>
            </div>

            <div class="marquee" id="<?php echo htmlspecialchars($artist_safe); ?>">
                <div class="marquee__inner" aria-hidden="true">
                    <span><?php echo htmlspecialchars($artist); ?></span>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</nav>
<?php endif; ?>

<script>
function toggleCategory(categoryId) {
    var categoryDiv = document.getElementById(categoryId);

    if (categoryDiv.style.display === "none") {
        // If hidden, show it and hide all others
        categoryDiv.style.display = "block";
        // Hide all other categories
        var allCategories = document.querySelectorAll('.category');
        allCategories.forEach(function(cat) {
            if (cat.id !== categoryId) {
                cat.style.display = "none";
            }
        });
    } else {
        // If visible, hide it
        categoryDiv.style.display = "none";
    }
}

// Add an event listener to the document to handle clicks outside of the categories
document.addEventListener('click', function(event) {
    // Get the target element of the click
    var targetElement = event.target;

    // Check if the click was outside of the category elements and menu items
    if (!targetElement.closest('.category') && !targetElement.closest('.menu__item')) {
        // Hide all categories
        var allCategories = document.querySelectorAll('.category');
        allCategories.forEach(function(cat) {
            cat.style.display = "none";
        });
    }
});

// Dummy functions for addToCart and toggleAudio - replace with your actual implementation
function addToCart(trackId) {
    alert('Adding track ' + trackId + ' to cart (not implemented)');
}

function toggleAudio(audioUrl, title, artist) {
    alert('Playing audio: ' + title + ' by ' + artist + ' (not implemented)');
}
</script>

</body>
</html>