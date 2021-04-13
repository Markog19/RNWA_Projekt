function search(name) {
    console.log(name);

    fetchSearchData(name);

}

function fetchSearchData(name) {
    fetch('search.php', {

        method: 'POST',
        body: new URLSearchParams('name=' + name)
    })
        .then(res => res.json())
        .then(res => viewSearchResult(res))
        .catch(e => console.error('Error: ' + e))

}


function viewSearchResult(data) {

    const dataViewer = document.getElementById("dataViewer");


    dataViewer.innerHTML = "";

    for (let i = 0; i < data.length; i++) {
        const tr = document.createElement("tr");
        const employee_id = document.createElement("td");
        const first_name = document.createElement("td");
        const last_name = document.createElement("td");
        const email = document.createElement("td");
        const phone_number = document.createElement("td");
        const hire_date = document.createElement("td");
        const job_id = document.createElement("td");
        const salary = document.createElement("td");
        const commission_pct = document.createElement("td");
        const manager_id = document.createElement("td");
        const department_id = document.createElement("td");


        employee_id.innerHTML = data[i]["employee_id"];
        first_name.innerHTML = data[i]["first_name"];
        last_name.innerHTML = data[i]["last_name"];
        email.innerHTML = data[i]["email"];
        phone_number.innerHTML = data[i]["phone_number"];
        hire_date.innerHTML = data[i]["hire_date"];
        job_id.innerHTML = data[i]["job_id"];
        salary.innerHTML = data[i]["salary"];
        commission_pct.innerHTML = data[i]["commission_pct"];
        manager_id.innerHTML = data[i]["manager_id"];
        department_id.innerHTML = data[i]["department_id"];

        dataViewer.appendChild(employee_id);
        dataViewer.appendChild(first_name);
        dataViewer.appendChild(last_name);
        dataViewer.appendChild(email);
        dataViewer.appendChild(phone_number);
        dataViewer.appendChild(hire_date);
        dataViewer.appendChild(job_id);
        dataViewer.appendChild(salary);
        dataViewer.appendChild(commission_pct);
        dataViewer.appendChild(manager_id);
        dataViewer.appendChild(department_id);

        dataViewer.appendChild(tr);
    }

}