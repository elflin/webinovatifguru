(function($) {
    "use strict"; // Start of use strict
  
    // Toggle the side navigation
    $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
      $("body").toggleClass("sidebar-toggled");
      $(".sidebar").toggleClass("toggled");
      if ($(".sidebar").hasClass("toggled")) {
        $('.sidebar .collapse').collapse('hide');
      };
    });
  
    // Close any open menu accordions when window is resized below 768px
    $(window).resize(function() {
      if ($(window).width() < 768) {
        $('.sidebar .collapse').collapse('hide');
      };
      
      // Toggle the side navigation when window is resized below 480px
      if ($(window).width() < 480 && !$(".sidebar").hasClass("toggled")) {
        $("body").addClass("sidebar-toggled");
        $(".sidebar").addClass("toggled");
        $('.sidebar .collapse').collapse('hide');
      };
    });
  
    // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
    $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
      if ($(window).width() > 768) {
        var e0 = e.originalEvent,
          delta = e0.wheelDelta || -e0.detail;
        this.scrollTop += (delta < 0 ? 1 : -1) * 30;
        e.preventDefault();
      }
    });
  
    // Scroll to top button appear
    $(document).on('scroll', function() {
      var scrollDistance = $(this).scrollTop();
      if (scrollDistance > 100) {
        $('.scroll-to-top').fadeIn();
      } else {
        $('.scroll-to-top').fadeOut();
      }
    });
  
    // Smooth scrolling using jQuery easing
    $(document).on('click', 'a.scroll-to-top', function(e) {
      var $anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: ($($anchor.attr('href')).offset().top)
      }, 1000, 'easeInOutExpo');
      e.preventDefault();
    });
  
  })(jQuery); // End of use strict


  // Drag Area
  const dragArea = document.querySelector('.drag-area');
  const dragText = document.querySelector('.headertext');

  const tempText = document.querySelector('.textReplace')

  let button = document.querySelector('.buttontext');
  let input = document.querySelector('#inputPdf')

  let file;

  button.onclick = () => {
    input.click();
  };

  // when browse
  input.addEventListener('change', function() {
    file = this.files[0];
    // dragArea.classList.add('bg-light3');
    // dragArea.classList.add('drag-area-active');

    displayFile();
  })

  // when file is inside the drag area
  dragArea.addEventListener('dragover', (event) => {
    event.preventDefault();
    dragText.textContent = "Release to Upload";
    dragArea.classList.add('bg-light3');
    dragArea.classList.add('drag-area-active');
    // console.log("File is in the drag area")
  });

  // Then lfile leaves the area
  dragArea.addEventListener('dragleave', () => {
    dragText.textContent = "Drag & Drop";
    dragArea.classList.remove('bg-light3');
    dragArea.classList.remove('drag-area-active');
    // console.log("File leave the drag Area")
  });

  // when the file is dropped in the drag area
  dragArea.addEventListener('drop', (event) => {
    event.preventDefault();

    file = event.dataTransfer.files[0];
    // console.log(file);

    displayFile();
  });

  function displayFile() {
    let fileType = file.type;
    console.log(fileType);
    let validExtensions = ['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];

    if (validExtensions.includes(fileType)) {
      let fileSize = file.size / 1024 / 1024;
      if (fileSize > 5) {
        alert('file must have a maximum size of 5 mb!');
      } else {
        let fileReader = new FileReader();

        fileReader.onload = () => {
          // let fileURL = fileReader.result;
          // console.log(fileURL);
          // let pdfTag = `<img src="/img/icons/fileicon.png" width="130" alt=""> <div class="ml-3">${file.name}</div>`;
          let pdfTag = `<div class="ml-3">${file.name}</div>`
          tempText.innerHTML = pdfTag;
        };
        fileReader.readAsDataURL(file);
      }
      
    } else {
      alert('This file is not in pdf or doc format!');
    }
    ; console.log('The file is dropped in drag area')
  };