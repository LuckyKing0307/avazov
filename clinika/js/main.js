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

function nextForm(e) {
    let progressBar = document.querySelector("."+e);
    if (progressBar.textContent!=='Tanlang'){
        if (currentStep < steps.length - 1) {
            currentStep++;
            updateProgress();
        }
        saveData();
        if (currentForm < 4) {
            currentForm++;
            showForm(currentForm);
        }
    }else{
        let parent = progressBar.parentElement; // Получаем его родителя
        parent.style.border = '1px solid red';
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
        alert('Заполните форму')
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
        });
        setTimeout(() => {
            window.location.href = "https://alisheravazov.uz/tnx_page.php";
        }, 100);
        saveData();
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const fbclid = document.querySelector(".fbclick").textContent;
    if (fbclid!=='null' && fbclid!==null){
        document.cookie = `_fbc=fb.1.${Math.floor(Date.now() / 1000)}.${fbclid}; path=/; max-age=7776000`;
    }
    const timerElement = document.querySelector(".timer");
    let totalSeconds = localStorage.getItem("timer")
        ? parseInt(localStorage.getItem("timer"))
        : 5 * 60; // 5 минут в секундах
    function updateTimerDisplay() {
        const minutes = Math.floor(totalSeconds / 60);
        const seconds = totalSeconds % 60;
        timerElement.textContent = `00:${String(minutes).padStart(2, "0")}:${String(seconds).padStart(2, "0")}`;
    }
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
                event.target.parentNode.querySelectorAll(".active_option").forEach(sibling => {
                    sibling.classList.remove("active_option");
                });
                event.target.classList.add("active_option");
                display.style.color = '#000';
                selectedText.textContent = event.target.textContent;
                indicator.style.visibility = "visible";
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