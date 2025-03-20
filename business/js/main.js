let currentForm = 1;
const formData = {};
const steps = [25, 50, 75, 100];
let currentStep = 0;
let utmValue = document.querySelector('.utm').textContent;
const progressBar = document.querySelector(".proccess");
const progressWrap = document.querySelector(".form_wraper");
const progressbg = document.querySelector(".form_bg");

function showForm(formNumber) {
    document.querySelectorAll(".form-container").forEach(form => form.classList.remove("active"));
    document.getElementById("form" + formNumber).classList.add("active");
}

function updateProgress() {
    progressBar.style.width = steps[currentStep] + "%";
    progressBar.textContent = steps[currentStep] + "%";
}

function nextForm() {
    if (currentStep < steps.length - 1) {
        currentStep++;
        updateProgress();
    }
    saveData();
    if (currentForm < 4) {
        currentForm++;
        showForm(currentForm);
    }
}

function exit() {
    progressWrap.style.display = 'none'
    progressbg.style.display = 'none'
}

function prevForm() {
    if (currentStep > 0) {
        currentStep--;
        updateProgress();
    }
    saveData();
    if (currentForm > 1) {
        currentForm--;
        showForm(currentForm);
    }
}

function saveData() {
    document.querySelectorAll(".custom-select").forEach((select, index) => {
        formData[`select${index + 1}`] = select.querySelector(".select-display span:last-child").textContent;
    });

}

function submitData(e) {
    e.style.display = 'none';
    if (document.getElementById("name").value === '' || document.getElementById("phone").value === '') {
        if (document.getElementById("name").value === ''){
            document.getElementById("name").style.border = '1px solid red';
        } if (document.getElementById("phone").value === ''){
            document.getElementById("phone").style.border = '1px solid red';
        }
    } else {
        formData.name = document.getElementById("name").value;
        formData.phone = document.getElementById("phone").value;
        formData.utm = utmValue;
        fetch('https://alisheravazov.uz/post_to_sheets.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams(formData)
        })
            .then(response => response.json())
            .then(data => {
                console.log("Ответ от сервера:", data);
                if (data.success) {
                    window.location.href = "https://alisheravazov.uz/tnx_page.php";
                } else {
                }
            })
            .catch(error => {
                console.error("Ошибка запроса:", error);
            });
        saveData();
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const timerElement = document.querySelector(".timer");
    let totalSeconds = localStorage.getItem("timer")
        ? parseInt(localStorage.getItem("timer"))
        : 5 * 60; // 5 минут в секундах
    document.getElementById('phone').addEventListener('input', function (e) {
        let x = e.target.value.replace(/\D/g, '').replace(/^998/, '').match(/(\d{0,2})(\d{0,3})(\d{0,2})(\d{0,2})/);
        e.target.value = "+998" + (x[1] ? ` (${x[1]}` : '') + (x[2] ? `) ${x[2]}` : '') + (x[3] ? `-${x[3]}` : '') + (x[4] ? `-${x[4]}` : '');
        e.target.style.color = '#000';
    });

    document.getElementById('phone').addEventListener('keydown', function (e) {
        if (e.target.value.length <= 5 && e.key === "Backspace") {
            e.preventDefault();
        }
    });

    document.querySelectorAll(".custom-select").forEach(select => {
        const display = select.querySelector(".select-display");
        const options = select.querySelector(".select-options");
        const selectedText = display.querySelector("span:last-child");
        const indicator = display.querySelector(".selected-indicator");
        display.addEventListener("click", () => {
            options.style.display = options.style.display === "block" ? "none" : "block";
        });

        options.addEventListener("click", (event) => {
            if (event.target.matches("div")) {
                display.style.color = '#000';
                selectedText.textContent = event.target.textContent;
                indicator.style.visibility = "visible";
                options.style.display = "none";
            }
        });
    });
    document.querySelectorAll(".register_btn").forEach(button => {
        button.addEventListener("click", () => {
            console.log("Кнопка нажата:", button);
            progressWrap.style.display = 'block'
            progressbg.style.display = 'block'
        });
    });
});