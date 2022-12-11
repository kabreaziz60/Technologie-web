
const getUserMessage = async (id) => {
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
  console.log(data);
  let users = data.users;
  let posts = data.posts;
    const msg = document.getElementById("chat");
    console.log(id)
  msg.innerHTML = posts
      ?.map(function (post) {
        if (post.recepterId == id || post.posterId == 1) {
          if (post.recepterId == id) {
            return ` <li class="you">
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
          } else if (post.posterId == 1) {
            return ` <li class="me">
                        <div class="entete">
                            <span class="status green"></span>
                            <h2${userOfmsg(users, 2)}</h2>
                            <h3>10:12AM, Today</h3>
                        </div>
                        <div class="triangle"></div>
                        <div class="message">
                            ${post.message}
                        </div>
                    </li>`;
          } 
        }else return null;
      })
    .join("");
};

const userOfmsg = (users, id) => {
   let user = users.find((user) => user.id == id);
   return user.name + user.firstname;
};
const msg = (post, id, ) => {
    const user = users.find(user => user.id === id)
    return `${user.name} ${" "} ${user.firstname} `
};
