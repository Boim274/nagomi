document.addEventListener('DOMContentLoaded', function() {
    const questionForm = document.getElementById('question-form');
    const questionList = document.getElementById('question-list-ul');
  
    questionForm.addEventListener('submit', function(event) {
      event.preventDefault();
  
      const questionTextarea = document.getElementById('question');
      const questionText = questionTextarea.value;
  
      if (questionText.trim() !== '') {
        // Tambahkan pertanyaan ke daftar
        const listItem = document.createElement('li');
        listItem.textContent = questionText;
        questionList.appendChild(listItem);
  
        // Bersihkan textarea
        questionTextarea.value = '';
      }
    });
  });
  