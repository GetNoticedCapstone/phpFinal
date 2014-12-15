<?php

    $name = $_POST['query'];
    
    // Set up the URL for the query
    $query = urlencode($name);
    $base_url = 'http://gdata.youtube.com/feeds/api/videos';
    $params = 'alt=json&q=' . $query;
    $url = $base_url . '?' . $params;

    // Use CURL to get data in JSON format
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $json_data = curl_exec($curl);
    curl_close($curl);

    // Get an array of videos from the JSON data and return it
    $data = json_decode($json_data, true);
    $videos = $data['feed']['entry'];?>

    <?php if (count($videos) != 0) : ?>
        <h2>Results</h2>
        <table>
        <?php foreach ($videos as $video) :
            $imgsrc = $video['media$group']['media$thumbnail'][1]['url'];
            $url = $video['link'][0]['href'];
            $text = $video['title']['$t'];
        ?>
            <tr>
                <td>
                    <a href="<?php echo $url; ?>">
                        <img src="<?php echo $imgsrc; ?>"/>
                    </a>
                </td>
                <td>
                    <form action="." method="post">
                        <input type="hidden" name="action"
                               value="display_email_view"/>
                        <input type="hidden" name="url"
                               value="<?php echo $url; ?>"/>
                        <input type="hidden" name="text"
                               value="<?php echo $text; ?>"/>
                    </form>
                    <a href="<?php echo $url; ?>" class="text-danger txtShadow lead" >
                        <?php echo $text; ?>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </table>
    <?php endif; ?>
        
?>

