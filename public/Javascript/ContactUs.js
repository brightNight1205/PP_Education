
    document.getElementById('university').addEventListener('change', function () {
        let universityId = this.value;

        fetch(`/majors/${universityId}`)
            .then(response => response.json())
            .then(data => {
                let majorSelect = document.getElementById('major');
                majorSelect.innerHTML = '<option value="">Select Major</option>';
                data.forEach(major => {
                    majorSelect.innerHTML += `<option value="${major.MajorID}">${major.Name}</option>`;
                });
            });
    });

