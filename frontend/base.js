class UserDetails {
    constructor(name, age, postCode, monekUser, companyId, positionTitle) {
        this.name = name;
        this.age = age;
        this.postCode = postCode;
        this.monekUser = monekUser;
        this.companyId = companyId;
        this.positionTitle = positionTitle;
    }
}

window.onload = () => {
    var userModal = document.getElementById('userModal')
    userModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var userId = button.getAttribute('data-bs-whatever');

        GetUserDetails(userId, (userDetails) => {
            var modalTitle = userModal.querySelector('.modal-title')
            var modalBody = userModal.querySelector('.modal-body')
            modalBody.textContent = 'Add details for update here';

            modalTitle.textContent = userDetails.name;
        });
    });

    function GetUserDetails(userId, callback) {
        // ...
        callback(new UserDetails('Luke Stonier', '23', 'WS14 9DZ', true, '100', 'Software Developer'));
    }

    var registerForm = document.getElementById('registerForm');
    registerForm.addEventListener('submit', (event) => {
        event.preventDefault();
        
        alert('Add code here');
    });
};