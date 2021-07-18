global $current_user, $post;
$number_of_parents = c_parent_comment_counter($post->ID,$current_user->ID);
echo "parents: ".$number_of_parents;
if ( $number_of_parents >= 1 ) {
    echo '<nav class="withcomment">';
    comment_form( array( 'title_reply' => __( 'Reply' ) ) );
    echo '</nav>';
} else {
    echo '<span class="withoutcomment">' . comment_form( array( 'title_reply' => __( 'Your opinion' ) ) ) . '</span>';
}
?>