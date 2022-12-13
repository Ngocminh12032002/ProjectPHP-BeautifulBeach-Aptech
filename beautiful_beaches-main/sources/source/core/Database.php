<?php
class Database
{
    private $__conn;
    // Kết nối database
    function __construct()
    {
        global $db_config;
        $this->__conn = Connection::getInstance($db_config);
    }
    // Thêm dữ liệu
    function insert($table, $data)
    {
        if (!empty($data)) {
            $fieldStr = '';
            $valueStr = '';
            foreach ($data as $key => $value) {
                $fieldStr .= $key . ',';
                $valueStr .= "'" . $valueStr . "'";
            }
            $fileStr = rtrim($fieldStr, ',');
            $valueStr = rtrim($valueStr, ',');

            $sql = "INSERT INTO $table($fieldStr) VALUES ($valueStr)";
            $status = $this->query($sql);
            if ($status) {
                return true;
            }
        }
        return false;
    }
    // Sửa dữ liệu
    function update($table, $data, $conddition = '')
    {
        if (!empty($data)) {
            $updateStr = '';
            foreach ($data as $key => $value) {
                $updateStr .= "$key='$value',";
            }
            $updateStr = rtrim($updateStr, ',');

            if (!empty($condition)) {
                $sql = "UPDATE $table SET $updateStr WHERE $conddition";
            } else {
                $sql = "UPDATE $table SET $updateStr";
            }
            $status = $this->query($sql);
            if ($status) {
                return true;
            }
        }
        return false;
    }

    // Xoá dữ liệu
    function delete($table, $data, $conddition = '')
    {

        if (!empty($condition)) {
            $sql = 'DELETE FROM' . $table . 'WHERE' . $conddition;
        } else {
            $sql = 'DELETE FROM' . $table;
        }
        $status = $this->query($sql);
        if ($status) {
            return true;
        }
    }

    // Truy vấn câu lệnh SQL
    function query($sql)
    {
        try {
            $statement = $this->__conn->prepare($sql);
            $statement->execute();
            return $statement;
        } catch (Exception $excepttion) {
            $mess = $excepttion->getMessage();
            $data['message'] = $mess;
            App::$app->loadError('database', $data);
            die();
        }
    }
    function getPost($key, $character = "'")
    {
        $value = '';

        if (isset($_POST[$key])) {
            $value = $_POST[$key];

            //Huy error sql injection
            $value = str_replace("'", "\\'", $value);
        }

        return $value;
    }


    // Lấy dữ liệu từ form->fix lỗi injection
    function getGet($key, $character = "'")
    {
        $value = '';

        if (isset($_GET[$key])) {
            $value = $_GET[$key];

            //Huy error sql injection
            $value = str_replace("'", "\\'", $value);
        }

        return $value;
    }
    // Trả về Id mới nhất sau khi đã insert
    function lasInsertId()
    {
        return $this->__conn->lastInsertIds();
    }
}
