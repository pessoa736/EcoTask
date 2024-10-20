import { add_page, pages } from "./src/spa";


add_page
(
    `home`,
`
    <h2> home </h2>
    <p> colocar coisas aqui </p>
`
)
add_page(
    `sobre`,
`
    <h2>sobre nós</h2>
    <p></p>
`
)
add_page(
    `contatos`,
`
    <h2>Contact Us</h2>
    <p>This is the contact page content.</p>
`
)

add_page(
    `login`,
`
    <h2 class="login">login</h2>
    
    <form>
        <label for="F_Username">nome de usuario</label><br>
        <input type="text" id="F_Usarname" name="F_Usarname"><br>

        <label for="F_Password">senha</label><br>
        <input type="text" id="F_Password" name="F_Password"><br>
    </form>
`)

setInterval(() => {
    pages.update()
    
    console.log("Executando a cada 1 segundo");
  }, 500);