import { Record } from "../../../immutable/dist/immutable-nonambient";
import { InstantID } from '../InstantID';
export declare type ID = InstantID;
export declare type CommentProps = {
    id: InstantID;
    rootId: InstantID;
    pageIndex: number;
    pdfObjectId?: number;
    creatorName: string | null | undefined;
    createdAt: Date;
    updatedAt: Date;
    text: string;
    customData?: {};
    group?: string | null | undefined;
    isEditable?: boolean;
    isDeletable?: boolean;
    canSetGroup?: boolean;
};
declare const Comment_base: Record.Factory<{
    id: any;
    rootId: any;
    pageIndex: any;
    pdfObjectId: any;
    creatorName: any;
    createdAt: Date;
    updatedAt: Date;
    text: any;
    customData: any;
    group: any;
    isEditable: any;
    isDeletable: any;
    canSetGroup: any;
}>;
export default class Comment extends Comment_base {
    id: InstantID;
    rootId: InstantID;
    pageIndex: number;
    pdfObjectId: number | null | undefined;
    creatorName: string | null | undefined;
    createdAt: Date;
    updatedAt: Date;
    text: string;
    customData: {} | null | undefined;
    group: string | void | null;
    isEditable: boolean | void;
    isDeletable: boolean | void;
    canSetGroup: boolean | void;
}
export declare const validate: (comment: Comment) => void;
export {};