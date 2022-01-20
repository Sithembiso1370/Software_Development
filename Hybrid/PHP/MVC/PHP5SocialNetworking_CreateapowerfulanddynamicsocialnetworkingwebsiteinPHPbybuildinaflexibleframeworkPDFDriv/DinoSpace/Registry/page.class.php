<?php

class Page{
    // Firstly, we need some variables to store the replacement data, such as tags,
    // post-parse tags, additional parsing data, and of course, the content of the
    // page as defined by the templates it is built from.
    // page title
    private $title = '';
    // template tags
    private $tags = array();
    // tags which should be processed after the page has been parsed
    // reason: what if there are template tags within the database
    // content, we must parse the page, then parse it again for post parse tags
    private $postParseTags = array();
    // template bits
    private $bits = array();
    // the page content
    private $content = "";
    private $apd = array();


    /**
    * Create our page object
    */
    function __construct( Registry $registry )
    {
    $this->registry = $registry;
    }

    // We need to set our page title variable and get it, so we need a getter and setter for this.

    /**
    * Get the page title from the page
    * @return String
    */
    public function getTitle()
    {
    return $this->title;
    }

    /**
    * Set the page title
    * @param String $title the page title
    * @return void
    */
    public function setTitle( $title )
    {
    $this->title = $title;
    }

    // We need to be able to update the content variable, for instance, after adding a new
    // template bit, or performing some replacement on the content.
    /**
    * Set the page content
    * @param String $content the page content
    * @return void
    */
    public function setContent( $content )
    {
    $this->content = $content;
    }

    // We need to be able to add tags to our replacement array.
    /**
    * Add a template tag, and its replacement value/data to the page
    * @param String $key the key to store within the tags array
    * @param String $data the replacement data (may also be an array)
    * @return void
    */
    public function addTag( $key, $data )
    {
    $this->tags[$key] = $data;
    }

    // If through some conditional logic in our code, we no longer use a tag or group of
    // tags, and there are no placeholders for them in the content, we will want to remove
    // it from the array.
    public function removeTag( $key )
    {
        unset( $this->tags[$key]);
    }

    // We also need to get the tags we wish to replace, so that our template object can
    // perform the replacements.
    /**
    * Get tags associated with the page
    * @return void
    */
    public function getTags()
    {
    return $this->tags;
    }

    // In addition to adding and getting tags from above, we also need to add and get Post Parse tags.
    /**
    * Add post parse tags: as per adding tags
    * @param String $key the key to store within the array
    * @param String $data the replacement data
    * @return void
    */
    public function addPPTag( $key, $data )
    {
    $this->postParseTags[$key] = $data;
    }
    /**
    * Get tags to be parsed after the first batch have been parsed
    * @return array
    */
    public function getPPTags()
    {
    return $this->postParseTags;
    }
    /**
    * Add a template bit to the page, doesnt actually add the content just yet
    * @param String the tag where the template is added
    * @param String the template file name
    * @return void
    */
    public function addTemplateBit( $tag, $bit )
    {
    $this->bits[ $tag ] = $bit;
    }

    // This addAdditionalParsingData method sets when additional parsing data
    // lookups should be performed, by defining the $block of code within the template
    // where the parsing should be done, the $tag to compare the $condition. The
    // $extratag that is replaced with $data should $tag equal $condition.

    /**
    * Adds additional parsing data
    * A.P.D is used in parsing loops. We may want to have an extra bitof data depending on on iterations value
    * for example on a form list, we may want a specific item to be"selected"
    * @param String block the condition applies to
    * @param String tag within the block the condition applies to
    * @param String condition : what the tag must equal
    * @param String extratag : if the tag value = condition then we havean extra tag called extratag
    * @param String data : if the tag value = condition then extra tag is replaced with this value
    */

    public function addAdditionalParsingData($block, $tag, $condition,$extratag, $data){
    $this->apd[$block] = array($tag => array('condition' => $condition,
    'tag' => $extratag, 'data' => $data));
    }

    // We will want to get a list of all the template bits we need to process into the page(processing is done by the template object).
    /**
    * Get the template bits to be entered into the page
    * @return array the array of template tags and template file names
    */
    public function getBits(){
    return $this->bits;
    }

    // We also need to get our array of additional parsing data for the template handler to process.
    public function getAdditionalParsingData()
    {
    return $this->apd;
    }

    // We often need to just access a specific loop block within our page; this method
    // makes this easy, by searching for us using regular expressions, and returning it.
    /**
    * Gets a chunk of page content
    * @param String the tag wrapping the block ( <!-- START tag -->  block <!-- END tag --> )
    * @return String the block of content
    */
    public function getBlock( $tag )
    {
    //echo $tag;
    // preg_match (‚#<!-- START ‚. $tag . ‚ -->(.+?)<!-- END ‚. $tag . ‚ -->#si', $this->content, $tor);
    // $tor = str_replace(‚<!-- START ‚. $tag . ‚ -->', „", $tor[0]);
    // $tor = str_replace (‚<!-- END ‚ . $tag . ‚ -->', „", $tor);
    // return $tor;
    }

    // Obviously, we need to get the content from the page, so we use the
    // getContent method.
    public function getContent()
    {
    return $this->content;
    }

    // Finally, when we are ready to output the content to the browser, we do some final
    // replacements. These are of template tags that we want to have in a template, but may
    // not always replace. One example is a registration form; if the submission has errors,
    // we would replace the form fields with the user's submission attempt. If, however,
    // the user is viewing the form for the first time, they wouldn't want to see anything, so
    // we would either have to explicitly remove the template tags, or instead, prefix them
    // with form_, and any leftovers are auto removed.
    // Once this is done, the content is returned to be output to the browser.

    public function getContentToPrint(){
        $this->content = preg_replace ('#{form_(.+?)}#si', '',
        $this->content);
        $this->content = preg_replace ('#{nbd_(.+?)}#si', '',
        $this->content);
        $this->content = str_replace('</body>', '<!-- Generated by our
        Fantastic Social Netowk -->
        </body>', $this->content );
        return $this->content;
    }

    // Authentication
    // In Chapter 3, Users, Registration, and Authentication, we will discuss how our user's
    // database will be structured, how we will manage the login and sign up process,
    // and how user authentication will work in general.
    // For now, we will leave this aspect out of our registry, and come back to it in the
    // next chapter.

    // URL processing
    // Since we are using a single frontend controller, we need to process the incoming
    // URL, in particular the page $_GET variable, to work out how to handle the users
    // request. This is generally done by breaking the variable down in parts, separated
    // by a forward slash.
    // Manually setting the URL path is something we may need to do, so a simple settermethod is needed.

    /**
    * Set the URL path
    * @param String the url path
    */
    public function setURLPath($path)
    {
    $this->urlPath = $path;
    }

    // The getURLData method processes the incoming URL, and breaks it down into parts, building up an array of "URL bits".
    /**
    * Gets data from the current URL
    * @return void
    */
    public function getURLData(){
        $urldata = ( isset( $_GET['page'] ) ) ? $_GET['page'] : '' ;
        $this->urlPath = $urldata;
        if( $urldata == '' )
        {
            $this->urlBits[] = '';
            $this->urlPath = '';
        }
        else
        {
            $data = explode( '/', $urldata );
            while ( !empty( $data ) && strlen( reset( $data ) ) === 0 )
            {
                array_shift( $data );
                }
                while ( !empty( $data ) && strlen( end( $data ) ) === 0)
                {
                    array_pop($data);
                }
            $this->urlBits = $this->array_trim( $data );
        }
    }

    // Similarly, we may need to have easy access to a specific bit. For example, if the
    // request is friends/view/ID, the first bit would indicate that we use the friend's
    // controller; the friends controller would then use a switch statement against the
    // second URL bit, to work out what it needs to do.
    public function getURLBit( $whichBit )
    {
    return ( isset( $this->urlBits[ $whichBit ] ) ) ?
    $this->urlBits[ $whichBit ] : 0 ;
    }

    // Another getter we need is to get the URL path.
    public function getURLPath()
    {
    return $this->urlPath;
    }

    // If we need to generate a URL, for instance, to build a link, or redirect the user, we
    // can make this easier with a helper function, which takes an array or URL $bits, any
    // additional information to go in the query string of the URL, $qs, and if the URL is an
    // administrative URL, $admin, (if it is, then it appends the administration directory to
    // the URL).

    public function buildURL( $bits, $qs, $admin )
    {
    $admin = ( $admin == 1 ) ? $this->registry->getSetting('admin_
    folder') . '/' : '';
    $the_rest = '';
    foreach( $bits as $bit )
    {
    $the_rest .= $bit . '/';
    }
    $the_rest = ( $qs != '' ) ? $the_rest . '?&' .$qs : $the_rest;
    return $this->registry->getSetting('siteurl') . $admin . $the_rest;
    }


}
