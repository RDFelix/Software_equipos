document.getElementById('hoverButton').addEventListener('mouseover', function () {
    var offcanvasElement = document.getElementById('offcanvasScrolling');
    var bsOffcanvas = new bootstrap.Offcanvas(offcanvasElement);
    bsOffcanvas.show();
  });
  
  document.getElementById('hoverButton').addEventListener('mouseout', function () {
    var offcanvasElement = document.getElementById('offcanvasScrolling');
    var bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvasElement);
    if (bsOffcanvas) {
      bsOffcanvas.hide();
    }
  });
  