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