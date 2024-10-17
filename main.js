function loadPage(page) {
    const content = document.getElementById('content');
    
    if (page === 'home') {
        content.innerHTML = `
            <h1>Welcome to My Website</h1>
            <p>This is the home page content.</p>
        `;
    } else if (page === 'sobre') {
        content.innerHTML = `
            <h1>About Us</h1>
            <p>This is the about page content.</p>
        `;
    } else if (page === 'contato') {
        content.innerHTML = `
            <h1>Contact Us</h1>
            <p>This is the contact page content.</p>
        `;
    }
}
loadPage('home');