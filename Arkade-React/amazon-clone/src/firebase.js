// For Firebase JS SDK v7.20.0 and later, measurementId is optional
// For Firebase JS SDK v7.20.0 and later, measurementId is optional

import firebase from "firebase";

const firebaseConfig = {
  apiKey: "AIzaSyCADFkNFqRrDSbNGT7EoRtEQfE65w57zDs",
  authDomain: "clone-624e9.firebaseapp.com",
  databaseURL: "https://clone-624e9.firebaseio.com",
  projectId: "clone-624e9",
  storageBucket: "clone-624e9.appspot.com",
  messagingSenderId: "695368439864",
  appId: "1:695368439864:web:5bc75c30b96d0717692ecd",
  measurementId: "G-0RZMW1CNBW"
};


const firebaseApp = firebase.initializeApp(firebaseConfig);

const db = firebaseApp.firestore();
const auth = firebase.auth();

export { db, auth };