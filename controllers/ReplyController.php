<?php

class ReplyController extends \BaseController {

	public function store()
    {
		$data = Input::all();
//		return Redirect::back()->withInput($data);
		$anonimo = (isset($data['anonimo']) && $data['anonimo'] == 'on');
		$nome = $data['nomeDeUsuario'];
		$email = isset($data['email']) ? $data['email']:Null;

		if (isset($data['anonimo']) && $data['anonimo'] == 'on')
		{

			$reply = Reply::create(
				[
					'post'    => $data['post'],
					'content' => $data['resposta'],
					'ip'      => Request::getClientIp(),
					'email'   => $data['email'],
					'name'    => '',
                    'type'    => $data['type'],
				]
			);
		}
		else
		{
			if (strlen($nome) < 5)
			{
				return Redirect::back();
			}
			
		    $reply = Reply::create(
				[
					'post'    => $data['post'],
					'content' => $data['resposta'],
					'ip'      => \Request::getClientIp(),
					'email'   => $data['email'],
					'name'    => $data['nomeDeUsuario'],
                    'type'    => $data['type'],
				]
			);
		}

        $post = $data['post'];
		$salt = str_random(50);

		$reply->salt = $salt;
		$reply->save();
		
		$reply->delete();
		
        $link = URL::to('reply/verify/id', $salt);

        Mail::send('emails.confirm.confirm_email', ['link' => $link, 'reply' => $reply], function ($message) use ($reply)
        {
            $message->to($reply->email)->subject('Estatuto da Unicamp - Confirmar envio de proposta');
        });

		return Redirect::route('post.show', $post);

	}

	public function verify($id)
	{
		Reply::withTrashed()->where('salt', $id)->restore();
		$reply = Reply::where('salt', $id)->get()->first();

		return Redirect::route("post.show", $reply->post);
	}


}
