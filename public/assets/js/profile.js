// Função para alterar a foto de capa
function changeCoverPhoto(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('cover-perfil').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

// Função para alterar a foto de perfil
function changeProfilePhoto(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('profile-photo').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}