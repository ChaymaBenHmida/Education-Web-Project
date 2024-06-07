<!-- (A) LOAD JS + CSS -->
<link rel="stylesheet" href="lidi.css"/>
<script src="lidi.js"></script>
 
<!-- (B) CREATE LIKE/DISLIKE BUTTON HERE -->
<div id="demoA"></div>
 
<!-- (C) JAVASCRIPT -->
<script>
lidi.create({
  status : 1, // OPTIONAL DEFAULT STATUS, 1 LIKE -1 DISLIKE
  hWrap : document.getElementById("demoA"),
  onChange : (status) => {
    // SEND THE NEW STATUS TO UPDATE YOUR SERVER
    var data = new FormData();
    data.append("status", status);
    fetch("1-dummy.txt", { method: "POST", body: data })
    .then(res => res.text())
    .then((txt) => { console.log(txt); })
    .catch((err) => { console.error(err); });
  }
});
</script>