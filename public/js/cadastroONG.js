const showData = (result) => {
    for (const campo in result) {
        if (document.querySelector("#" + campo)) {
            document.querySelector("#" + campo).value = result[campo];
        }
    }
};
$("#cep").keyup(function (e) {
    e.preventDefault();
    if (this.value.replace(/\D/g, "").length == 8) {
        fetch(`https://viacep.com.br/ws/${cep.value}/json`)
            .then((response) => {
                response.json().then((data) => showData(data));
            })
            .catch((e) => console.log("Deu erro: " + e, message));
    }
});

$("#telefone").keyup(function (e) {
    let telefone = $(this).val();
    let mask_telefone =
        telefone.replace(/\D/g, "").length === 11
            ? "(00) 0 0000-0000"
            : "(00) 0000-00000";

    $(this).mask(mask_telefone);
});

$(document).ready(function () {
    $("#form-create-ong").submit(async function (e) {
        e.preventDefault();

        $('.error-message').remove();
        $('.red-border').removeClass('red-border');

        const formData = new FormData(this); // Coleta todos os dados do formulário
        const csrfToken = $('meta[name="_token"]').val();

        try {
            const response = await fetch(this.action, {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                    Accept: "application/json",
                },
                body: formData,
            });

            const result = await response.json();

            if (result.code === 201) {
                Swal.fire({
                    icon: "success",
                    title: "Sucesso",
                    text: result.message,
                }).then(() => {
                    location.reload();
                });
            } else if (result.code === 422) {
                for (const field in result.errors) {
                    for (let index = 0;index < result.errors[field].length;index++) {
                        const element = result.errors[field][index];
                        const inputElement = $(`input[name="${field}"]`);
                        inputElement.addClass("red-border");
                        inputElement.after(`<span class="error-message">${element}</span>`);

                    }
                }
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Erro",
                    text: result.message,
                });
            }
        } catch (error) {
            Swal.fire({
                icon: "error",
                title: "Erro",
                text: "Ocorreu um erro. Por favor, tente novamente.",
            });
        }
    });
});
