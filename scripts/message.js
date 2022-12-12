let _id;
let _idUser;
const getUserMessage = async (id, user) => {
    // console.log(user.id);
    _id = id;
    _idUser = user?.id;
  let headersList = {
    Accept: "*/*",
    "User-Agent": "Thunder Client (https://www.thunderclient.com)",
    "Content-Type": "application/x-www-form-urlencoded",
  };

  let bodyContent = "id=" + id;

  let response = await fetch(
    "http://localhost/Technologie-web/php/getUserMessage.php",
    {
      method: "POST",
      body: bodyContent,
      headers: headersList,
    }
  );

  let data = await response.json();
  let users = data.users;
  let posts = data.posts;
  const msg = document.getElementById("chat");
  msg.innerHTML = posts
    ?.map(function (post) {
      if (
        (post.recepterId == id && post.posterId == user?.id) ||
        (post.recepterId == user?.id && post.posterId == id)
      ) {
          return ` <li class= ${post.posterId == user?.id ? "me" : "you"} >
                        <div class="entete">
                            <span class="status green"></span>
                            <h2>${userOfmsg(users, post.recepterId)}</h2>
                            <h3>10:12AM, Today</h3>
                        </div>
                        <div class="triangle"></div>
                        <div class="message">
                            ${post.message}
                        </div>
                    </li>`;
      } else return null;
    })
    .join("");
};

const userOfmsg = (users, id) => {
  let user = users.find((user) => user.id == id);
  return user.name + user.firstname;
};
let message
const send = () => {
    let sendInput = document.querySelector(".sendInput");
    sendInput.addEventListener("change", (e) => {
        message = e.target.value
    });
};
const sendClick = async () => {
   const button = document.querySelector(".sendBtn");

   button.addEventListener("click", async (event) => {
     let headersList = {
       Accept: "*/*",
       "User-Agent": "Thunder Client (https://www.thunderclient.com)",
       "Content-Type": "application/x-www-form-urlencoded",
     };

     let bodyContent = "message="+message+"&posterId="+_id+"&recepterId="+_idUser

     let response = await fetch(
       "http://localhost/Technologie-web/php/addMessage.php",
       {
         method: "POST",
         body: bodyContent,
         headers: headersList,
       }
     );

       let data = await response.text();
       if (data) {
           getUserMessage(_id, _idUser)
           
       } else {
           console.log("erreur")
       }
       
   });
};

function updateValue(e) {
  console.log(e.target.value);
}
