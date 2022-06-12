class Registration extends React.Component {
    render() {
        return (
            <div>
                <form action="/registration.php" className="form-signin" method="POST">
                    <h2 className="form-signin-heading"> Введите данные пользователя</h2>
                    <label htmlFor="inputEmailLogin" className="sr-only"> Логин - Email</label>
                    <input type="email" id="inputEmailLogin" className="form-control" name="emailRegistration" placeholder="Email address/Логин" required autoFocus />
                    <label htmlFor="inputPassword" className="sr-only"> Пароль </label>
                    <input type="password" id="inputPassword" className="form-control" placeholder="Пароль" name="passwordRegistration"/>
                    <label htmlFor="inputRepeatPassword" className="sr-only"> Повторите пароль </label>
                    <input type="password" id="inputRepeatPassword" className="form-control" placeholder="Повторите пароль" name="passwordRepeatRegistration"/>
                    <button className="btn btn-lg btn-primary btn-block" type="submit" name="registration">Регистрация</button>
                </form>
                <a className="nav-link" href="/authorization.php">Назад</a>
            </div>
        )
    }
}

ReactDOM.render(<Registration/>, document.getElementById('appRegistration'));