 
  // JavaScript for typing effect
  const words = ["Integrity.", "Commitment."," Reliabilty." ];
  let currentWordIndex = 0;
  let currentCharIndex = 0;
  const replacementElement = document.getElementById('replacement');

  function typeWord() {
      const currentWord = words[currentWordIndex];
      if (currentCharIndex < currentWord.length) {
          replacementElement.textContent += currentWord[currentCharIndex];
          currentCharIndex++;
          setTimeout(typeWord, 100); // Type next character after 100ms
      } else {
          // Wait for a second before starting to erase the word
          setTimeout(eraseWord, 1000);
      }
  }

  function eraseWord() {
      if (currentCharIndex > 0) {
          replacementElement.textContent = replacementElement.textContent.slice(0, -1);
          currentCharIndex--;
          setTimeout(eraseWord, 100); // Erase next character after 100ms
      } else {
          // Move to the next word
          currentWordIndex = (currentWordIndex + 1) % words.length;
          currentCharIndex = 0; // Reset char index for new word
          setTimeout(typeWord, 500); // Wait before typing the next word
      }
  }

  // Start the typing effect
  typeWord();
 
 
 // Function to generate an array of 50 random numbers
 function generateRandomNumbers(count, min, max) {
    const numbers = [];
    for (let i = 0; i < count; i++) {
        // Generate a random number between min and max
        numbers.push(Math.floor(Math.random() * (max - min + 1)) + min);
    }
    return numbers;
}

// Generate 50 random viewer numbers between 1 and 1000
const viewerNumbers = generateRandomNumbers(50, 1, 1000);

let currentIndex = 0;
const viewerCountElement = document.getElementById('viewerCount');

// Function to update the viewer count every second
setInterval(() => {
    // Move to the next index in the array, and if it reaches the end, start over
    currentIndex = (currentIndex + 1) % viewerNumbers.length;

    // Update the content of the viewerCountElement with the new number
    viewerCountElement.textContent = viewerNumbers[currentIndex];
}, 5000); // This will execute every 1000 milliseconds (1 second)


  

 // Show/Hide Scroll to Top Button
 const scrollToTop = document.getElementById("scrollToTop");

 window.addEventListener("scroll", () => {
     if (window.scrollY > 200) {
         scrollToTop.classList.add("show");
     } else {
         scrollToTop.classList.remove("show");
     }
 });

 // Scroll to Top Functionality
 scrollToTop.addEventListener("click", () => {
     window.scrollTo({
         top: 0,
         behavior: "smooth",
     });
 });

 function toggleSocialIcons() {
    const socialIcons = document.querySelector("#expandable-bubble .social-icons");
    socialIcons.style.display = socialIcons.style.display === "flex" ? "none" : "flex";
}