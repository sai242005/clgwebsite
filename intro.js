function updateDateTime() {
    var date = new Date();
    var options = { timeZone: 'Asia/Kolkata', 
    year: 'numeric',
    month: 'long',
    day: 'numeric',
    hour: 'numeric',
    minute: 'numeric',
    second: 'numeric'
    }; 
  
    var datetimeElement = document.getElementById('datetime');
    datetimeElement.innerHTML = date.toLocaleString('en-IN', options);
  }


setInterval(updateDateTime, 1000);
  document.addEventListener("DOMContentLoaded", function() {
    const imageContainer = document.querySelector(".image-container");
    
    
    imageContainer.addEventListener("mouseover", function() {
      const imageList = imageContainer.querySelector(".image-list");
      imageList.style.animationPlayState = "paused";
    });
    
    imageContainer.addEventListener("mouseout", function() {
      const imageList = imageContainer.querySelector(".image-list");
      imageList.style.animationPlayState = "running";
    });
  });

  