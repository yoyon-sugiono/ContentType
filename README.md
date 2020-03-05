# ContentType

use AutoblogPro\ContentType;

$content = new ContentType();

$content->display('json', json_encode(['one', 'two', 'three']));
