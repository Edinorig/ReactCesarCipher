<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style-index.css">
    <title>Document</title>
</head>

<body>

    <section>
        <div class="wrapper-conteiner">
            <form action="">

                <div class="wrapper-encode">
                    <div class="encode">
                        <h4>Input data</h4>
                        <textarea name="input-message" id="" placeholder="MESSAGE"></textarea>
                        <input type="text" placeholder="KEY" name="input-key">
                        <button type="button" onclick="display()" >Encode</button>
                        <button type="button"  onclick="">Decode</button>
                        <button type="button" onclick="reset()" >Reset</button>
                    </div>
                </div>

                <div class="wrapper-decode">
                    <div class="decode">
                        <h4>Output</h4>
                        <textarea name="output-message"  placeholder="OUTPUt"></textarea>

                    </div>
                </div>

                <div class="wrapper-brutforce">
                    <div class="brutforce"></div>
                </div>

            </form>

        </div>
    </section>

    <script src="./js/cipher.js"></script>

</body>

</html>