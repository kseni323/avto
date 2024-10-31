document.querySelectorAll('.form-select').forEach(select => {
    select.addEventListener('change', function () {
        const classFilter = document.getElementById('classFilter').value;
        const transmissionFilter = document.getElementById('transmissionFilter').value;
        const driveTypeFilter = document.getElementById('driveTypeFilter').value;
        
        fetch('/filter-cars', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                class: classFilter,
                transmission: transmissionFilter,
                drive_type: driveTypeFilter
            })
        })
        .then(response => response.json())
        .then(data => {
            // Update the car display section with the filtered cars
            document.querySelector('#car-results').innerHTML = data.html;
        });
    });
});