function subscribeUser() {
    const emailInput = document.getElementById('subs-email');
    const email = emailInput.value;

    fetch('/subscribe', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ email })
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        emailInput.value = ''; // Очищаем поле ввода
    })
    .catch(error => console.error('Error:', error));
}