// pencarian di kolom koleksi

var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-74px";
  }
  prevScrollpos = currentScrollPos;
};

var $rows = $(".koleksi .benda");
// var $col = $("#carditem");

$("#pencarianbenda").keyup(function () {
  var val = $.trim($(this).val()).replace(/ +/g, " ").toLowerCase();
  $rows
    .show()
    .filter(function () {
      var text = $(this).text().replace(/\s+/g, " ").toLowerCase();
      return !~text.indexOf(val);
    })
    .hide();
    
}
);

// laporan
// preview gambar
function showPreview(event) {
  if (event.target.files.length > 0) {
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-1-preview");
    preview.src = src;
    preview.style.display = "block";
    preview.style.height = "100px";
    preview.style.width = "100%";
  }
}
// laporan
// preview gambar
function showPreview2(event) {
  if (event.target.files.length > 0) {
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-2-preview");
    preview.src = src;
    preview.style.display = "block";
    preview.style.height = "100px";
    preview.style.width = "100%";
  }
}
// preview gambar
function showPreview3(event) {
  if (event.target.files.length > 0) {
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-3-preview");
    preview.src = src;
    preview.style.display = "block";
    preview.style.height = "100px";
    preview.style.width = "100%";
  }
}
// preview gambar4
function showPreview4(event) {
  if (event.target.files.length > 0) {
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-4-preview");
    preview.src = src;
    preview.style.display = "block";
    preview.style.height = "100px";
    preview.style.width = "100%";
  }
}

// validasi laporan
(function () {
  "use strict";
  var forms = document.querySelectorAll(".needs-validation");
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add("was-validated");
      },
      false
    );
  });
})();


//   validasi laporan
// (function () {
//   "use strict";

//   // Fetch all the forms we want to apply custom Bootstrap validation styles to
//   var forms = document.querySelectorAll(".needs-validation");

//   // Loop over them and prevent submission
//   Array.prototype.slice.call(forms).forEach(function (form) {
//     form.addEventListener(
//       "submit",
//       function (event) {
//         if (!form.checkValidity()) {
//           event.preventDefault();
//           event.stopPropagation();
//         }

//         form.classList.add("was-validated");
//       },
//       false
//     );
//   });
// })();


ScrollReveal({ reset: true });


ScrollReveal().reveal(".slide-right", {
  duration: 3000,
  origin: "left",
  distance: "300px",
  // easing: "ease-in-out"
});
ScrollReveal().reveal(".slide-left", {
  duration: 3000,
  origin: "right",
  distance: "300px",
  // easing: "ease-in-out"
});
ScrollReveal().reveal(".slide-top", {
  duration: 3000,
  origin: "bottom",
  distance: "300px",
  // easing: "ease-in-out"
});
ScrollReveal().reveal(".slide-bottom", {
  duration: 3000,
  origin: "top",
  distance: "300px",
  // easing: "ease-in-out"
});

ScrollReveal().reveal(".slide-up", {
  duration: 3000,
  origin: "bottom",
  distance: "100px",
  easing: "cubic-bezier(.37,.01,.74,1)",
  opacity: 0.3,
  scale: 0.5
});




ScrollReveal().reveal(".show-once", {
  reset: false
});

ScrollReveal().reveal(".title", {
  duration: 1000,
  origin: "top",
  distance: "400px",
  easing: "cubic-bezier(0.5, 0, 0, 1)",
  rotate: {
    x: 20,
    z: -10
  }
});

// if empty img
$(document).ready(function(){
  $('.modal .img_empty img[src=""]').hide();
  $('.modal .img_empty img:not([src=""])').show();
});