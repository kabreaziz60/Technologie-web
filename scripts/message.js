let _id;
let _idUser;
let users;
let posts;
let msg
let recepter
let data;
let message;
   
const getUserMessage = async (id, user) => {
    // console.log(user.id);
    _id = id;
  _idUser = user?.id;
   recepter = document.querySelector(".recepter");
  let headersList = {
    Accept: "*/*",
    "User-Agent": "Thunder Client (https://www.thunderclient.com)",
    "Content-Type": "application/x-www-form-urlencoded",
  };

  // let bodyContent = "id=" + id;

  let response = await fetch(
    "http://localhost/Technologie-web/php/getUserMessage.php",
    {
      method: "POST",
      // body: bodyContent,
      headers: headersList,
    }
  );

  data = await response.json();
  users = data.users;
  posts = data.posts;
  msg = document.getElementById("chat");
  recepter.innerHTML = `<h2>chat avec ${userOfmsg(users, id)}</h2>
                    <h3>already 1902 messages</h3>`;
  msg.innerHTML = posts
    ?.map(function (post) {
      if (
        (post.recepterId == id && post.posterId == user?.id) ||
        (post.recepterId == user?.id && post.posterId == id)
      ) {
          return ` <li class= ${post.posterId == user?.id ? "me" : "you"} >
                        <div class="entete">
                            <span class="status green"></span>
                            <h2>${userOfmsg(users, post.posterId)}</h2>
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
  return user.name + ' - ' + user.firstname;
};



const allData = async (id) => {
  let headersList = {
    Accept: "*/*",
    "User-Agent": "Thunder Client (https://www.thunderclient.com)",
    "Content-Type": "application/x-www-form-urlencoded",
  };

  // let bodyContent = "id=" + id;

  let response = await fetch(
    "http://localhost/Technologie-web/php/getUserMessage.php",
    {
      method: "POST",
      // body: bodyContent,
      headers: headersList,
    }
  );

  data = await response.json();
  return data
  };
  const sendClick = async () => {
  message = document.querySelector(".sendInput").value;
   const button = document.querySelector(".sendBtn");
     let headersList = {
       Accept: "*/*",
       "User-Agent": "Thunder Client (https://www.thunderclient.com)",
       "Content-Type": "application/x-www-form-urlencoded",
     };

     let bodyContent = "message="+message+"&posterId="+_idUser+"&recepterId="+_id

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
      document.querySelector(".sendInput").value = '';
         let d = await allData()
           msg.innerHTML = d.posts
             ?.map(function (post) {
               if (
                 (post.recepterId == _id && post.posterId == _idUser) ||
                 (post.recepterId == _idUser && post.posterId == _id)
               ) {
                 return ` <li class= ${
                   post.posterId == _idUser ? "me" : "you"
                 } >
                        <div class="entete">
                            <span class="status green"></span>
                            <h2>${userOfmsg(users, post.posterId)}</h2>
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
           
       } else {
           console.log("erreur")
       }
};

const realtime =  async() => {
 allData().then(res => {
     mapData(res)

  })
}
const mapData = async (p) => {
   msg.innerHTML = p.posts
     ?.map(function (post) {
       if (
         (post.recepterId == _id && post.posterId == _idUser) ||
         (post.recepterId == _idUser && post.posterId == _id)
       ) {
         return ` <li class= ${post.posterId == _idUser ? "me" : "you"} >
                        <div class="entete">
                            <span class="status green"></span>
                            <h2>${userOfmsg(users, post.posterId)}</h2>
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
}

setInterval(realtime, 100)