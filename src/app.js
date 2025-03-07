const home = document.getElementById('home-page');
const privacy = document.getElementById('privacy-page');
const ai = document.getElementById('ai-page');
const viruses = document.getElementById('viruses-page');
const phishing = document.getElementById('phishing-page');
const fakenews = document.getElementById('fakenews-page');
const addicts = document.getElementById('addicts-page');
const end = document.getElementById('end-page');

document.addEventListener('DOMContentLoaded', function() {

    console.log('Projekt wykonany przez: \n Filipa Tworus, \n Antoniego Bogusa, \n Bartosza Rafalskiego, \n Michała Stępnia, \n Adama Gryzbu-Dachniewskiego, \n Piotra Malarskiego.')

    document.getElementById('home-btn').addEventListener('click', function() {
        privacy.style.display = 'none';
        ai.style.display = 'none';
        viruses.style.display = 'none';
        phishing.style.display = 'none';
        fakenews.style.display = 'none';
        addicts.style.display = 'none';
        end.style.display = 'none';
        home.style.display = "grid";
    })

    document.getElementById('privacy-btn').addEventListener('click', function() {
        home.style.display = 'none';
        ai.style.display = 'none';
        viruses.style.display = 'none';
        phishing.style.display = 'none';
        fakenews.style.display = 'none';
        addicts.style.display = 'none';
        end.style.display = 'none';
        privacy.style.display = 'grid';
    })

    document.getElementById('ai-btn').addEventListener('click', function() {
        home.style.display = 'none';
        privacy.style.display = 'none';
        viruses.style.display = 'none';
        phishing.style.display = 'none';
        fakenews.style.display = 'none';
        addicts.style.display = 'none';
        end.style.display = 'none';
        ai.style.display = 'grid';
    })

    document.getElementById('viruses-btn').addEventListener('click', function() {
        home.style.display = 'none';
        privacy.style.display = 'none';
        ai.style.display = 'none';
        phishing.style.display = 'none';
        fakenews.style.display = 'none';
        addicts.style.display = 'none';
        end.style.display = 'none';
        viruses.style.display = 'grid';
    })

    document.getElementById('phishing-btn').addEventListener('click', function() {
        home.style.display = 'none';
        privacy.style.display = 'none';
        ai.style.display = 'none';
        viruses.style.display = 'none';
        fakenews.style.display = 'none';
        addicts.style.display = 'none';
        end.style.display = 'none';
        phishing.style.display = 'grid';
    })

    document.getElementById('fakenews-btn').addEventListener('click', function() {
        home.style.display = 'none';
        privacy.style.display = 'none';
        ai.style.display = 'none';
        viruses.style.display = 'none';
        phishing.style.display = 'none';
        addicts.style.display = 'none';
        end.style.display = 'none';
        fakenews.style.display = 'grid';
    })

    document.getElementById('addicts-btn').addEventListener('click', function() {
        home.style.display = 'none';
        privacy.style.display = 'none';
        ai.style.display = 'none';
        viruses.style.display = 'none';
        phishing.style.display = 'none';
        fakenews.style.display = 'none';
        end.style.display = 'none';
        addicts.style.display = 'grid';
    })
    document.getElementById('end-btn').addEventListener('click', function() {
        home.style.display = 'none';
        privacy.style.display = 'none';
        ai.style.display = 'none';
        viruses.style.display = 'none';
        phishing.style.display = 'none';
        fakenews.style.display = 'none';
        addicts.style.display = 'none';
        end.style.display = 'grid';
    })
})