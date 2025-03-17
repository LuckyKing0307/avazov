function sendEvent(eventType, formData = {}) {
    let data = {
        event: eventType,
        user_agent: navigator.userAgent,
        fbc: document.cookie.match(/_fbc=([^;]*)/)?.[1] || null,
        fbp: document.cookie.match(/_fbp=([^;]*)/)?.[1] || null
    };

    Object.assign(data, formData);

    fetch("../pixel_send.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: new URLSearchParams(data)
    }).then(response => response.text()).then(console.log);
}

// Событие PageView при загрузке страницы
window.onload = () => sendEvent("PageView");

// Событие нажатия на кнопку
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".register_btn").forEach(button => {
        button.addEventListener("click", function () {
            console.log('aaaaaaaaaaa')
            sendEvent("ClickButton");
        });
    });

    // Событие отправки формы
    document.querySelector(".send_btn").addEventListener("click", function () {
        let formData = {
            name: document.getElementById("name").value,
            phone: document.getElementById("phone").value,
        };
        document.querySelectorAll(".custom-select").forEach((select, index) => {
            formData[`field${index + 1}`] = select.querySelector(".select-display span:last-child").textContent;
        });

        sendEvent("FormSubmit", formData);

        // Отправляем событие "Lead" после успешной отправки формы
        setTimeout(() => sendEvent("Lead", formData), 2000);
    });
});
