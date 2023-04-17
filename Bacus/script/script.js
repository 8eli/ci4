let commentForm = document.getElementById("CommentForm");

commentForm.addEventListener("submit", (e) => {
  e.preventDefault();

  let email = document.getElementById("Email");
  let name = document.getElementById("Name");
  let comment = document.getElementById("Comment");

  if (email.value == "" || name.value == "" || comment.value == "") {
    alert("Please input properly");
  } else {
    // perform operation with form input
    //alert(email.value + '' + name.value );
    alert(`Your Comment \n 
      Email: ${email.value} \n 
      Name: ${name.value} \n 
      Comment: ${comment.value} \n 
   `);

    email.value == "";
    name.value == "";
    comment.value == "";
  }
});
