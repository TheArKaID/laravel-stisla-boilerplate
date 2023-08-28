import React from 'react';
import Header from '../Components/Header';
import Sidebar from '../Components/Sidebar';
import Footer from '../Components/Footer';
import BlankPage from '../Pages/BlankPage';

function App(){
    return(
        <div className="main-wrapper">
            <Header />

            <Sidebar />

            <BlankPage />

            <Footer />
        </div>
    );
}

export default App;