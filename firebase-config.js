// Import the required Firebase SDKs
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
import { getAuth } from "firebase/auth"; // Firebase Authentication
import { getDatabase } from "firebase/database"; // Firebase Realtime Database

// Firebase configuration object
const firebaseConfig = {
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
  apiKey: "AIzaSyBCMJYKNndykB7wzuyA-mKlQzzzzPF73ZQ",
  authDomain: "housemusickitchen-b3f91.firebaseapp.com",
  databaseURL: "https://housemusickitchen-b3f91-default-rtdb.firebaseio.com",
  projectId: "housemusickitchen-b3f91",
  storageBucket: "housemusickitchen-b3f91.firebasestorage.app",
  messagingSenderId: "1044801917653",
  appId: "1:1044801917653:web:6487cd19efb66404be485c",
  measurementId: "G-3NBE8FPPTW"
};
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const auth = getAuth(app); // Initialize Firebase Authentication
const database = getDatabase(app); // Initialize Firebase Realtime Database

export { app, auth, database };
