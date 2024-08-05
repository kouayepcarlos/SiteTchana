document.getElementById('searchIcon').addEventListener('click', function() {
    var searchInput = document.getElementById('searchInput');
    if (searchInput.classList.contains('show')) {
      searchInput.classList.remove('show');
    } else {
      searchInput.classList.add('show');
    }
  });