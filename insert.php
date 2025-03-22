<?php

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "housemusickitchen_db";
    $port = 3306; // Your MySQL port number

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch Artists from the database
$sql_artists = "SELECT artist_id, name, image FROM artists";
$result_artists = $conn->query($sql_artists);

if ($result_artists->num_rows > 0) {
    while ($artist_row = $result_artists->fetch_assoc()) {
        $artist_id = $artist_row['artist_id'];
        $artist_name = htmlspecialchars($artist_row['name']); // Sanitize the name to prevent XSS
        $artist_safe = str_replace(' ', '', $artist_name); // Remove spaces for filenames and IDs
        $artist_image = htmlspecialchars($artist_row['image']); // Sanitize the image path/URL

        echo '<nav class="menu">';
        echo '    <!-------------------------------------------------------------------------Start of ' . $artist_name . '----------------------------------------------------------------------------------------------------------------->';
        echo '    <div class="menu__item" id="product-list-' . $artist_safe . '">';
        echo '        <a class="menu__item-link" data-category="' . $artist_safe . '" onclick="toggleCategory(\'' . $artist_safe . '\')">' . $artist_name . '</a>';
        echo '        <img style="margin-left: 30%" class="menu__item-img" src="' . htmlspecialchars($artist_image) . '" alt="' . $artist_name . '"/>'; //Use the DB image

        echo '        <div class="category" id="' . $artist_safe . '">';
        echo '            <div class="trklist v- full init-invis" >';
        echo '                <div class="trk-row hdr">';
        echo '                    <div class="trk-cell tnum-pos"></div>';
        echo '                    <div class="trk-cell thumb"></div>';
        echo '                    <div class="trk-cell title sort"><a href="javascript:void(0)" data-sort="track" id="s_track">TRACK</a></div>';
        echo '                    <div class="trk-cell artists sort"><a href="javascript:void(0)" data-sort="artist" id="s_artist">ARTISTS</a></div>';
        echo '                    <div class="trk-cell label sort"><a href="javascript:void(0)" data-sort="label" id="s_label">LABEL</a></div>';
        echo '                    <div class="trk-cell genre sort"><a href="javascript:void(0)" data-sort="genre" id="s_genre">GENRE</a></div>';
        echo '                    <div class="trk-cell r-date sort"><a href="javascript:void(0)" data-sort="r_date" id="s_r_date">RELEASED</a></div>';
        echo '                    <div class="trk-cell btncell"></div>';
        echo '                    <div class="sort-sel"><b>Sort</b>&nbsp;</div>';
        echo '                </div>';
        echo '                <!-------------------------------------------------------------------------Start of Tracks----------------------------------------------------------------------------------------------------------------->';

        // Fetch Tracks for the current artist
        $sql_tracks = "SELECT artist_id, title, file_path, genre, release_date, price FROM tracks WHERE artist_id = '$artist_id'";
        $result_tracks = $conn->query($sql_tracks);

        if ($result_tracks->num_rows > 0) {
            while ($track_row = $result_tracks->fetch_assoc()) {
                $track_title = htmlspecialchars($track_row['title']);
                $track_file_path = htmlspecialchars($track_row['file_path']);
                $track_genre = htmlspecialchars($track_row['genre']);
                $track_release_date = htmlspecialchars($track_row['release_date']);
                $track_price = htmlspecialchars($track_row['price']);

                echo '                <div class="product" data-id="3" data-price="' . $track_price . '">';
                echo '                    <h3>';
                echo '                        <div data-trid="11834552" class="trk-row play-trk ptk-11834552 ptk-ref-11834552">';
                echo '                            <div class="product" ddata-id="3" data-price="' . $track_price . '">';
                echo '                                <div class="trk-cell tnum-pos"></div>';
                echo '                                <div class="trk-cell thumb">';
                echo '                                    <img src="' . htmlspecialchars($artist_image) . '" width="50" height="50" />'; // Use the artist image
                echo '                                    <div class="play-fly">';
                echo '                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio(\'' . $track_file_path . '\', \'' . $track_title . '\', \'' . $artist_name . '\', \'audioPlayer\')">';
                echo '                                        </a>';
                echo '                                        <audio id="audioPlayer" style="display: none;">';
                echo '                                            <source src="' . $track_file_path . '" type="audio/mpeg">';
                echo '                                            Your browser does not support the audio element.';
                echo '                                        </audio>';
                echo '                                    </div>';
                echo '                                </div>';
                echo '                                <div class="trk-cell artit-cont"></div>';
                echo '                                <div class="trk-cell title">';
                echo '                                    <a href="#">' . $artist_name . ' - ' . $track_title . '</a><span class="adap-br"><br /></span>'; //Added artist name
                echo '                                    <span class="duration">(Unknown)</span>'; // You'll need to calculate or store the track duration
                echo '                                </div>';
                echo '                                <div class="trk-cell artists">';
                echo '                                    <a href="#" class="com-artists" data-aid="' . $artist_id . '">' . $artist_name . '</a> <span class="adap-br"><br /></span>'; //Use artist_id
                echo '                                </div>';
                echo '                                <div class="trk-cell label"></div>'; // No label in your DB schema
                echo '                                <div class="trk-cell genre">';
                echo '                                    ' . $track_genre . ''; // Display genre
                echo '                                </div>';
                echo '                                <div class="trk-cell r-date">';
                echo '                                    ' . $track_release_date . '';  //Display Release Date
                echo '                                </div>';
                echo '                                <div class="trk-cell btncell">';
                echo '                                    <div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 52170145, track_id: 11834552}" title="Add to Cart">';
                echo '                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent" class="product" onclick="addToCart(2)" data-price="' . $track_price . '">$' . $track_price . '</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>';
                echo '                                </div>';
                echo '                                <div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg><svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>';
                echo '                                <div class="menu-fly"></div>';
                echo '                                <div class="trk-drop-menu com-drop-menu">';
                echo '                                    <a href="javascript:void(0)" class="com-close sm"></a>';
                echo '                                    <div class="com-drop-hdr fol-hdr">';
                echo '                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;follow:';
                echo '                                    </div>';
                echo '                                </div>';
                echo '                            </div>';
                echo '                        </div>';
                echo '                    </h3>';
                echo '                </div>';
            }
        } else {
            echo '                <p>No tracks found for this artist.</p>'; // Handle case with no tracks
        }

        echo '            </div>';
        echo '        </div>';
        echo '        <div id="debugInfo"></div>';
        echo '        <div id="mainBay" class="category" style="width: 100%; margin: 0px; position: relative; top: 0px; max-width: 0px; min-height: 0px;"></div>';
        echo '        <div id="bodyBay"  data-init_cpo="">';
        echo '            <script type="text/javascript">';
        echo '                $(function() { enablePageListPage(); });';
        echo '            </script>';
        echo '            <div class="marquee" id="' . $artist_safe . '">';
        echo '                <div class="marquee__inner" aria-hidden="true">';
        echo '                    <span>' . $artist_name . '</span>';
        echo '                </div>';
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</nav>';
    }
} else {
    echo "<p>No artists found.</p>";
}

// Close the database connection
$conn->close();
?>
