<script type="module">
    const formEl = document.getElementById('form_login')

    const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
    const appendAlert = (message, type) => {
        const wrapper = document.createElement('div')
        wrapper.innerHTML = [
            `<div class="alert alert-${type} alert-dismissible" role="alert">`,
            `   <div>${message}</div>`,
            '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
            '</div>'
        ].join('')

        alertPlaceholder.append(wrapper)
    }

    async function handleSubmit(e){
        e.preventDefault();

        const name = document.getElementById('name');
        const password = document.getElementById('password');

        if(!name.value || !password.value){
            appendAlert('Wrong credentials!', 'danger');
            return;
        }

        const data = {
            name: name.value,
            password: password.value
        };

        await fetch('{{ route('login_auth') }}',{
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                'Content-Type'  : 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
            .then(response => response.json())
            .then(response => {

                if(!response.status){
                    appendAlert(response.message, 'danger');
                    return;
                }

                appendAlert(response.message, 'success');

                console.log(response)
                window.location.href = response.data.url;
            })
            .catch(error => {
                appendAlert('Wrong credentials!', 'danger');
                console.log(error);
            });
    }

    formEl.addEventListener('submit', handleSubmit);
</script>
