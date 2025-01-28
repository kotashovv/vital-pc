<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? sanitize_text_field($_POST['username']) : '';
    $userphone = isset($_POST['userphone']) ? sanitize_text_field($_POST['userphone']) : '';
    $userid = isset($_POST['userid']) ? sanitize_text_field($_POST['userid']) : '';
    $userselect = isset($_POST['user-select']) ? sanitize_text_field($_POST['user-select']) : '';

    if (!empty($username) && (!empty($userphone) || !empty($userid))) {
        $to = 'kotashov03@gmail.com';
        $subject = 'Новая заявка';
        $message = "Имя: $username\n";
        $message .= "Телефон: $userphone\n";
        $message .= "ID в соцсетях: $userid\n";
        $message .= "Цель: $userselect\n";

        $headers = array('Content-Type: text/plain; charset=UTF-8');

        if (wp_mail($to, $subject, $message, $headers)) {
            echo 'Форма успешно отправлена!';
        } else {
            echo 'Ошибка при отправке формы.';
        }
    } else {
        echo 'Пожалуйста, заполните все обязательные поля.';
    }
} else {
    echo 'Некорректный метод запроса.';
}
?>