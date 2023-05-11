let _id;
let _idUser;
let users;
let posts;
let msg
let recepter
let data;
let message;
   


const getUserMessage = async (id, user) => {
    _id = id;
  _idUser = user?.id;
   recepter = document.querySelector(".recepter");
  let headersList = {
    Accept: "*/*",
    "User-Agent": "Thunder Client (https://www.thunderclient.com)",
    "Content-Type": "application/x-www-form-urlencoded",
  };

  let response = await fetch(
    "http://localhost/Technologie-web/php/getTaskAndUser.php",
    {
      method: "POST",
      headers: headersList,
    }
  );

  data = await response.json();
  users = data.users;
  posts = data.posts;
  console.log(data)
};