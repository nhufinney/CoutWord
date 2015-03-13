<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/CountWord.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug']=true;


    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));
    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.twig');
    });


    $app->get("/result", function() use($app) {
        $user_test = new RepeatCounter;
        $user_key_input = $_GET['key_word'];
        $user_string_input = $_GET['input_string'];
        $count_result = $user_test->countRepeats($user_key_input, $user_string_input);
        return $app['twig']->render('result.twig', array(
            'result_key' => $user_key_input,
            'result_string' => $user_string_input,
            'result_count' => $count_result

        ));
    });

    return $app;
?>
