<?php if (!defined('IN_PHPBB')) exit; ?><form method="get" name="search" action="<?php echo (isset($this->_rootref['S_SEARCHBOX_ACTION'])) ? $this->_rootref['S_SEARCHBOX_ACTION'] : ''; ?>"><span class="gensmall"><?php echo ((isset($this->_rootref['L_SEARCH_FOR'])) ? $this->_rootref['L_SEARCH_FOR'] : ((isset($user->lang['SEARCH_FOR'])) ? $user->lang['SEARCH_FOR'] : '{ SEARCH_FOR }')); ?>:</span> <input class="post" type="text" name="keywords" size="20" /> <input class="btnlite" type="submit" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" /><?php echo (isset($this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'])) ? $this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'] : ''; ?></form>