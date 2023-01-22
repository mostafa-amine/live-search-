



const form = document.getElementById('search_form');

form.addEventListener('submit', function(e){
    e.preventDefault();


    const token = document.querySelector('meta[name="csrf-token"]').content;
    const url = this.getAttribute('action');

    const q = document.getElementById('q').value;


    fetch(url, {
        headers: {
            'content-type' : 'application/json',
            'X-CSRF-TOKEN' : token
        },
        method: 'post',
        body: JSON.stringify({
            q: q
        })
    }).then(Response => {
        Response.json().then( data => {

            const post = document.getElementById('post')
            post.innerHTML = ''

            Object.entries(data)[0][1].forEach(element => {
                post.innerHTML += `
                <div class="bg-light col-6 border border-1 p-3 mt-2" >
                    <div>
                        <h3>${element.title}</h3>
                    </div>

                    <div>
                        <p>${element.content}</p>
                    </div>
                </div>
                `
            });
        } )
    }).catch(error => {
        console.log(error)
    })
})
