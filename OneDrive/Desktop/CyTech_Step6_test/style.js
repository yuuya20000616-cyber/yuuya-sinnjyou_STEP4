function checkForm() {

    const name = document.getElementById('name').value;
    const companyName = document.getElementById('companyName').value;
    const email = document.getElementById('email').value;
    const age = document.getElementById('age').value;
    const message = document.getElementById('message').value;

    if (
        name === '' ||
        companyName === '' ||
        email === '' ||
        age === '' ||
        message === ''
    ) {

        alert('必須項目が未入力です。入力内容をご確認ください。');

        return false;
    }

    const result = confirm(
        '下記の内容を本当に送信しますか？\n\n' +
        'お名前：' + name + '\n' +
        '会社名：' + companyName + '\n' +
        'メールアドレス：' + email + '\n' +
        '年齢：' + age + '\n' +
        'お問い合わせ内容：' + message
    );

    return result;
}

const button = document.querySelector('#colorButton');

const footer = document.querySelector('footer');

const colors = ['blue', 'red', 'yellow', 'gray'];

let index = 0;

button.addEventListener('click', function () {

    footer.style.backgroundColor = colors[index];

    index++;

    if (index >= colors.length) {
        index = 0;
    }

});