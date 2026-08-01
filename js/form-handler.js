(function () {
  const form = document.getElementById("demoForm");
  const status = document.getElementById("formStatus");
  if (!form) return;

  form.addEventListener("submit", async function (e) {
    e.preventDefault();
    const submitBtn = form.querySelector(".form-submit");
    const originalText = submitBtn.textContent;
    submitBtn.textContent = "Sending...";
    submitBtn.disabled = true;

    const payload = {
      name: form.name.value.trim(),
      company: form.company.value.trim(),
      email: form.email.value.trim(),
      phone: form.phone.value.trim(),
      industry: form.industry.value,
      message: form.message.value.trim()
    };

    try {
      const res = await fetch("api/registration/submit.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(payload)
      });
      const data = await res.json();

       status.classList.remove("success", "error");
      if (data.success) {
        form.reset();
        showRegistrationSuccess();
      } else {
        status.textContent = data.message || "Something went wrong. Please try again.";
        status.classList.add("error", "show");
      }
    } catch (err) {
      status.classList.remove("success");
      status.textContent = "Could not reach the server. Please try again.";
      status.classList.add("error", "show");
    } finally {
      submitBtn.textContent = originalText;
      submitBtn.disabled = false;
    }
  });
})();
