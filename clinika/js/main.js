let currentForm = 1;
const formData = {};
const steps = [25, 50, 75, 100];
let currentStep = 0;

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

function submitData() {
    if (document.getElementById("name").value === '' || document.getElementById("phone").value === '') {
        alert('Заполните форму')
    } else {
        formData.name = document.getElementById("name").value;
        formData.phone = document.getElementById("phone").value;
        fetch('http://localhost/avazov/post_to_sheets.php', {
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
                    alert("Данные успешно отправлены!");
                } else {
                    alert("Ошибка при отправке: " + data.message);
                }
            })
            .catch(error => {
                console.error("Ошибка запроса:", error);
                alert("Ошибка соединения с сервером!");
            });
        saveData();
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const timerElement = document.querySelector(".timer");
    let totalSeconds = localStorage.getItem("timer")
        ? parseInt(localStorage.getItem("timer"))
        : 5 * 60; // 5 минут в секундах
    function updateTimerDisplay() {
        const minutes = Math.floor(totalSeconds / 60);
        const seconds = totalSeconds % 60;
        timerElement.textContent = `00:${String(minutes).padStart(2, "0")}:${String(seconds).padStart(2, "0")}`;
    }

    function startTimer() {
        const timerInterval = setInterval(() => {
            if (totalSeconds > 0) {
                totalSeconds--;
                localStorage.setItem("timer", totalSeconds);
                updateTimerDisplay();
            } else {
                clearInterval(timerInterval);
                localStorage.removeItem("timer"); // Очистка по завершении
            }
        }, 1000);
    }

    updateTimerDisplay(); // Обновляем при загрузке
    startTimer();
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