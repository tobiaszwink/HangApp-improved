<header id="header">
  <div class="container-h">
    <h1>HangApp</h1>
    <nav>
      <ul>
        <li>Home</li>
        <li>Contato</li>
        <li>Quem somos</li>
        <li>Parceiros</li>
      </ul>

      <form class="search">
        <img src="img/icon-search.png" onclick="search('block')">
        <input type="text" id="busca">
      </form>
    </nav>
  </div>
</header>

<script type="text/javascript">
function search (display){
  document.getElementById("busca").style.display = display;
}
</script>