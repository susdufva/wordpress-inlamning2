var requestAPI = {
    method: 'GET',
    redirect: 'follow'
};


fetch("http://localhost/inlamning2/wordpress/wp-json/wp/v2/butik" , requestAPI)
    .then(response => response.text()) //json istället för text
    .then(data=> {console.log("resultat", data)
document.querySelector("#div").innerText = data })
    .catch(error => console.log('error' , error));

  

