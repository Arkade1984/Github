import firebase from 'firebase';

const firebaseApp = firebase.initializeApp({
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional

    apiKey: "AIzaSyCzPsYGsr4aOoapqbb5TItGudYvnqPSOVI",
    authDomain: "facebook-messanger-clone-cc215.firebaseapp.com",
    projectId: "facebook-messanger-clone-cc215",
    storageBucket: "facebook-messanger-clone-cc215.appspot.com",
    messagingSenderId: "414982183827",
    appId: "1:414982183827:web:fa980ca5b83f65a7d3a666",
    measurementId: "G-G1PYF47693"
  });

const db = firebaseApp.firestore();

export {db};
