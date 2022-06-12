class Authorization extends React.Component {
    render() {
        return (
            <div>
                <form action="/authorization.php" className="form-signin" method="POST">
                    <h2 className="form-signin-heading"> Введите логин и пароль </h2>
                    <label htmlFor="inputEmail" className="sr-only"> Email address</label>
                    <input type="email" id="inputEmail" className="form-control" name="emailAuthorization" placeholder="Email address/Логин" required autoFocus />
                    <label htmlFor="inputPassword" className="sr-only"> Password</label>
                    <input type="password" id="inputPassword" className="form-control" placeholder="Пароль" name="passwordAuthorization"/>
                    <button className="btn btn-lg btn-primary btn-block" type="submit" name="authorization">Авторизация</button>
                </form>
                <a className="nav-link" href="/registration.php">Регистрация</a>
            </div>
        )
    }
}

ReactDOM.render(<Authorization/>, document.getElementById('appAuthorization'));



