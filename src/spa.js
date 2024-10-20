class Pages{
    #itens
    #page_view
    constructor(){
        this.#page_view= "",
        this.#itens= []

        console.log("espaco de paginas criado")
    }
    update(){
        this.#itens.forEach(page => {
            const content = document.getElementById('content');

            if (page.name == this.#page_view){
                content.innerHTML = page.content

                console.log("pagina atualizada para: "+ page.name)
            }
        });
    }
    set_page_view(page_name){
        this.#page_view = page_name
        console.log("pagina mudarar para: "+ page_name)
    }
}


export var pages = Pages()

class Page{
    constructor(name, content = ""){
        this.content = content
        this.name = name

        pages.append(this) 

        console.log("pagina "+name+" foi adicionado ao espaco de paginas")
    }
}

export function add_page(name, content){
    new Page(name, content)
}