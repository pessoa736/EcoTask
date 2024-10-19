var page = "home"

function set_page(new_page){
    page = new_page
}

function updatePage() {
    const content = document.getElementById('content');
    if (page === 'home') {
        content.innerHTML = `
            <h2> home </h2>
            <p> colocar coisas aqui </p>
        `;
    } else if (page === 'sobre') {
        content.innerHTML = `
            <h2>sobre nós</h2>
            <p></p>
        `;
    } else if (page === 'contato') {
        content.innerHTML = `
            <h2>Contact Us</h2>
            <p>This is the contact page content.</p>
        `;
    }else if (page === 'login') {
        content.innerHTML = `
            <h2 class="login">login</h2>
            <form>
                <label for="F_Username">nome de usuario</label><br>
                <input type="text" id="F_Usarname" name="F_Usarname"><br>
                <label for="F_Password">senha</label><br>
                <input type="text" id="F_Password" name="F_Password"><br>
            </form>
        `;
    }
}

setInterval(() => {
    updatePage()
    console.log("Executando a cada 1 segundo");
  }, 500);