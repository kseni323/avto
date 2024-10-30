document.addEventListener("DOMContentLoaded", function() {
    console.log("JavaScript is connected");
});

function showUserForm() {
    document.getElementById("userModal").style.display = "block";
}

function closeModal() {
    document.getElementById("userModal").style.display = "none";
}

function subscribeUser() {
    const emailInput = document.getElementById("subs-email").value;
    
    if (emailInput === "") {
        alert("Пожалуйста, введите ваш адрес электронной почты.");
    } else {
        // Если поле заполнено, показать сообщение о подписке
        alert("Спасибо за подписку! Проверяйте вашу почту для получения новостей.");
    }
}